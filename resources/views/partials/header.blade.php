<header id="masthead" class="site-header">
    <div class="site-branding">
        <h1 class="site-title"><a href="index.html" rel="home">{{ config('app.name') }}</a></h1>
        <h2 class="site-description">Minimalist Ecommerce Bookstore</h2>
    </div>
    <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle">Menu</button>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div class="menu-menu-1-container">
            <ul id="menu-menu-1" class="menu">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="{{ route('shop') }}">Shop</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
