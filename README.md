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

#### (Gilda) Review:
1. The newsfeed looks really professional with a great layout and design. It seems to be very well thought out, both visually and structurally.
2. `article.views.php:36` - alt tags seem to be empty once you click on an article, but they exist on the images on the home page. 
3. `breaking.views.php:7` - the alt tag contains the title of the article, though it would increase the page's accessibility if there was a description of the image instead.
4. `navigation.php:30` - the href tag in the Authors link is empty so it doesn't lead anywhere.
5. `navigation.php:46-52` - the list items doesn't contain any links, though they give the impression of being clickable links when visiting the page.


#### (Martin) Review:
1. Super clean layout - Great contrast on entire site, well made responsiveness on both mobile, tablet and desktop.
2. Routes to articles looks good aswell, good readability with nice lineheights and font sizes.
3. On any given article route at desktop width, a white border appear above the article sidebar with greater height than width dividing the main article and sidebar, not sure if intended or not?
4. When hoovering categories it gives the feel of clickability, until hoovering the actual text of the category and then it shows the I-beam pointer, so a little confusing.
5. Regarding the actual php it looks broken down to well thought out reusable components, such as footer, header, nav etc.. nothing really to comment there.
