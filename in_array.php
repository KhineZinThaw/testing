<?php

$fruits = ["apple", "mango", "banana", "orange"];

$search = "aaaa";

if (in_array($search, $fruits)) {
    echo "found";
} else {
    echo "Not Found";
}