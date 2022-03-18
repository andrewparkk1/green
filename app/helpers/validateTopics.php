<?php 

function validateTopic($topic) {
    $errors = array();
    if (empty($topic['name'])) {
        array_push($errors, 'name is required');
    }

    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if (isset($existingTopic)) {
        if (isset($topic['update-topic']) && $existingTopic['id'] != $topic['id']) {
            array_push($errors, 'Topic with that title already exists');
        }
        if (isset($topic['add-topic'])) {
            array_push($errors, 'Topic with that title already exists');
        } 
    }
    return $errors;
}

?>