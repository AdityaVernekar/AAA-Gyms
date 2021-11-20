<?php


function validateProducts($product)
{
    $errors = array();

    if (empty($product['name'])) {
        array_push($errors, 'Product Name is required');
    }

    if (empty($product['body'])) {
        array_push($errors, 'Body is required');
    }

    if (empty($product['price'])) {
        array_push($errors, 'Please enter a price');
    }
    if (empty($product['stocks'])) {
        array_push($errors, 'Please enter the total Stocks of this product');
    }

    $existingPost = selectOne('products', ['name' => $product['name']]);
    if ($existingPost) {
        // if (isset($product['update-post']) && $existingPost['id'] != $product['id']) {
        //     array_push($errors, 'Post with that title already exists');
        // }

        if (isset($product['add-product'])) {
            array_push($errors, 'Post with that title already exists');
        }
    }

    return $errors;
}
?>