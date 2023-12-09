<?php

use modules\Module;

test('Merging URL with path works', function() {
    $output = Module::getInstance()->mergeUrlWithPath(
        'https://example.com/es',
        'blog/my-cool-blog',
    );

    expect($output)
        ->toBe('https://example.com/es/blog/my-cool-blog');
});

test('Merging URL with overlapping path works', function() {
    $output = Module::getInstance()->mergeUrlWithPath(
        'https://example.com/es',
        'es/blog/my-cool-blog',
    );

    expect($output)
        ->toBe('https://example.com/es/blog/my-cool-blog');
});

test('Merging URL with trailing slash with overlapping path works', function() {
    $output = Module::getInstance()->mergeUrlWithPath(
        'https://example.com/es/',
        'es/blog/my-cool-blog',
    );

    expect($output)
        ->toBe('https://example.com/es/blog/my-cool-blog');
});

test('Merging URL with overlapping path with leading slash works', function() {
    $output = Module::getInstance()->mergeUrlWithPath(
        'https://example.com/es',
        '/es/blog/my-cool-blog',
    );

    expect($output)
        ->toBe('https://example.com/es/blog/my-cool-blog');
});

test('Merging URL with trailing slash with overlapping path with leading slash works', function() {
    $output = Module::getInstance()->mergeUrlWithPath(
        'https://example.com/es/',
        '/es/blog/my-cool-blog',
    );

    expect($output)
        ->toBe('https://example.com/es/blog/my-cool-blog');
});
