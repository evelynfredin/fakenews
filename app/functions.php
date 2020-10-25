<?php

declare(strict_types=1);

// Formats the Published Date of the articles
function dateFormatter(string $date): string
{
    return date('F jS\, Y', strtotime($date));
}

// Matches the id from the USER table to the author in the POSTS table and returns the author name
function getAuthorForPost(stdClass $post, array $users): string
{
    foreach ($users as $user) {
        if ($user->id == $post->author) {
            return $user->full_name;
        }
    }
}

// Creates an excerpt from the article's content
function excerpt(stdClass $post): string
{
    if (strlen($post->content) < 200) {
        return $post->content;
    } else {

        $new = wordwrap($post->content, 198);
        $new = explode("\n", $new);

        $new = $new[0] . '...';

        return $new;
    }
}


// Gets the image path for the article picture
function imgPath(string $name): string
{
    return '/uploads/' . $name;
}
