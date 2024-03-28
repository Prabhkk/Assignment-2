<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Book Hub</title>
    <link rel="import" href="Categories.php">
</head>
<body> 

    <header>
        <h1>Book Hub</h1>
        <p>Discover Inspiration on Every Page</p>
    </header>
    
    <nav>
        <a href="#" class="active">Home</a>
        <a href="Search.php">Search</a>
        <a href="About.php">About Us</a>
        <a href="#">Contact</a>
    </nav>
    
    <section class="hero">
        <h2>Find Your Next Favorite Book: Embrace the Journey</h2>
        <p>Explore Book Hub, where the latest stories refresh your reading experience and make every book a new adventure.</p>
        <a href="#" class="btn">Shop Now</a>
    </section>

    <br>

    <div class="intro">
        <p>This proposal introduces the development of "Book Hub" an interactive website for people who love to read. The goal of Book Hub is to offer a centralized platform where readers can explore and buy new books. You can explore a wide range of books, discover new releases, and find your next favorite read.</p>
        <p>Book Hub is a dedicated platform for book lovers which will provide a convenient place to explore and purchase a variety of books. It will manage a database containing information about books, authors, and new releases. This data will help suggest books personalized to the reader's taste and keep the book catalog organized for easy browsing.</p>
        <p>Come and explore Book Hub for your next favorite read...</p>
    </div>

    <?php
    // Book details with descriptions
    $books = array(
        array("Jane Eyre", "$35", "book1.jpg", "book1_description.php"),
        array("The Story of My Life", "$25", "book2.jpg", "book2_description.php"),
        array("Thirteen Reasons Why", "$30", "book3.jpg", "book3_description.php"),
        array("The Secret", "$40", "book4.jpg", "book4_description.php")
    );

    // Display books with links to description pages
    foreach ($books as $book) {
        echo '<div class="book">';
        echo '<a href="' . $book[3] . '"><img src="' . $book[2] . '" alt="' . $book[0] . '"></a>';
        echo '<p>' . $book[0] . '</p>';
        echo '<p>' . $book[1] . '</p>';
        echo '</div>';
    }
    ?>

    <section class="featured">
        <h2>Featured Collections</h2>
        <div class="product1">
            <img src="image1.jpg" alt="Kid's Collection">
            <h3>Kid's Collection</h3>
        </div>
        <div class="product2">
            <img src="image2.jpg" alt="Recipe Books Collection">
            <h3>Recipe Book Collection</h3>
        </div>
    </section>
    <br>
    <footer>
        <p>&copy; 2024 Book Hub. All rights reserved.</p>
    </footer>

</body>
</html>