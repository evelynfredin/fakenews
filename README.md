# F-News | The F is for Freedom

## About The Project

The challenge was to create a Fake News website that had 5 different authors and each author had 2 articles published.

## Tech Stack

-   HTML
-   CSS
-   PHP
-   SQLite
-   JavaScript

## Features

-   Mobile first
-   Get suggested articles by category
-   Sort by most liked
-   Sort by newest
-   Supports dark mode
-   404 page to catch unexistent IDs

## To Run This Code On Your Machine

1. Install PHP-SQLite3
    * On Windows (Ubuntu)
    ```
        sudo apt-get install php-sqlite3
    ```
    * On macOS (With Brew)
    ```
        $ brew install sqlite
    ```
    
2. Clone this repo
``` 
    git clone https://github.com/evelynfredin/fakenews.git
```
3. Navigate to the right directory `$ cd /path/to/directory/`

4. Get a local server running:
````
    php -S localhost:8000
````
5. Enjoy of some good 'ol fake news which technically are just some of Haken's lyrics.

## Testing Done By
* [Martin Hansson](https://github.com/Alegherix)
* [Jakob Gustafsson](https://github.com/gusjak)

## License

MIT License

## Made By

Evelyn Fredin

## Code Review

(Martin) Review:

1. Super clean layout - Great contrast on entire site, well made responsiveness on both mobile, tablet and desktop.
2. Routes to articles looks good aswell, good readability with nice lineheights and font sizes.
3. On any given article route at desktop width, a white border appear above the article sidebar with greater height than width dividing the main article and sidebar, not sure if intended or not?
4. When hoovering categories it gives the feel of clickability, until hoovering the actual text of the category and then it shows the I-beam pointer, so a little confusing.
5. Regarding the actual php it looks broken down to well thought out reusable components, such as footer, header, nav etc.. nothing really to comment there.
