<?php
define( 'DB_NAME', "D:\\Xampp\\htdocs\\php-lwhh\\8_crud_project\\data\\db.txt" );

function seed() {
    $data = array(
        array(
            'id'    => 1,
            'fname' => 'Pobitro',
            'lname' => 'Raj',
            'roll'  => '5',
        ),
        array(
            'id'    => 2,
            'fname' => 'Tanmay',
            'lname' => 'Shaha',
            'roll'  => '8',
        ),
        array(
            'id'    => 3,
            'fname' => 'Prince',
            'lname' => 'Hossain',
            'roll'  => '12',
        ),
        array(
            'id'    => 4,
            'fname' => 'Muhi',
            'lname' => 'Muntaka',
            'roll'  => '2',
        ),
        array(
            'id'    => 5,
            'fname' => 'Shahriar',
            'lname' => 'Nipun',
            'roll'  => '22',
        ),
    );

    $serializeData = serialize( $data );
    file_put_contents( DB_NAME, $serializeData, LOCK_EX );
}

//generateReport
function generateReport() {
    $serializedData = file_get_contents( DB_NAME );
    $students = unserialize( $serializedData );?>

    <table class="table table-striped table-dark">
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th>Action</th>
        </tr>

    <?php foreach ( $students as $student ): ?>
        <tr>
            <td><?php printf( '%s %s', $student['fname'], $student['lname'] )?></td>
            <td><?php printf( '%s', $student['roll'] )?></td>
            <td><?php printf( '<a href="index.php?task=edit&id=%s">Edit</a> | <a class="delete" href="index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id'] )?></td>
        </tr>
    <?php endforeach;?>

    </table>
    <?php

}

//addStudent
function addStudent( $fname, $lname, $roll ) {
    $found = false;
    $serializedData = file_get_contents( DB_NAME );
    $students = unserialize( $serializedData );

    foreach ( $students as $_student ) {
        if ( $roll == $_student['roll'] ) {
            $found = true;
            break;
        }
    }
    if ( !$found ) {
        $newId = getNewID( $students );
        $student = array(
            'id'    => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll'  => $roll,
        );

        array_push( $students, $student );
        $serializedData = serialize( $students );
        file_put_contents( DB_NAME, $serializedData, LOCK_EX );
        return true;
    }
    return false;
}

//getStudent
function getStudent( $id ) {
    $serializedData = file_get_contents( DB_NAME );
    $students = unserialize( $serializedData );

    foreach ( $students as $student ) {
        if ( $student['id'] == $id ) {
            return $student;
        }
    }
    return false;
}

//updateStudent
function updateStudent( $id, $fname, $lname, $roll ) {
    $found = false;
    $serializedData = file_get_contents( DB_NAME );
    $students = unserialize( $serializedData );

    foreach ( $students as $_student ) {
        if ( $_student['roll'] == $roll && $_student['id'] != $id ) {
            $found = true;
            break;
        }
    }

    if ( !$found ) {

        $students[$id - 1]['fname'] = $fname;
        $students[$id - 1]['lname'] = $lname;
        $students[$id - 1]['roll'] = $roll;

        $serializedData = serialize( $students );
        file_put_contents( DB_NAME, $serializedData, LOCK_EX );
        return true;
    }
    return false;
}

//deleteStudent

function deleteStudent( $id ) {
    $serializedData = file_get_contents( DB_NAME );
    $students = unserialize( $serializedData );

    foreach ( $students as $offset => $student ) {
        if ( $student['id'] == $id ) {
            unset( $students[$offset] );
        }
    }
    // unset( $students[$id - 1] );

    $serializedData = serialize( $students );
    file_put_contents( DB_NAME, $serializedData, LOCK_EX );
}

// function Raw() {
//     $serializedData = file_get_contents( DB_NAME );
//     $students = unserialize( $serializedData );
//     print_r( $students );
// }

function getNewID( $students ) {
    $maxId = max( array_column( $students, 'id' ) );
    return $maxId + 1;
}