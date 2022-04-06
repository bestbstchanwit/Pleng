<div class="navbar-main">
    <link rel="stylesheet" href="css/navbar.css">
    <header class="header-enter">
        <div class="search-box">
            <input type="text" name="" class="search-input" placeholder="Type to search">
            <a href="" class="search-button"><i class="fas fa-search"></i></a>
        </div>
        <ul>
            <li><a href="sign.php">Sign</a></li>
        </ul>
    </header>

    <script>
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    });
    </script>
</div>