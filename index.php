<?php
session_start();
?>

<!DOCType html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LoopedOut</title>
        <link rel="stylesheet" href="index_css.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    </head>

    <body>

        <header>
        <div class="logo">
            <h2>LoopedOut</h2>
        </div>
        <nav>
            <a href="">Products</a>
            <a href="">Size Chart</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="dashboard.php">My Account</a>
            <?php else: ?>
                <a href="Account.html">Account</a>
            <?php endif; ?>
        </nav>
    </header>

    <section class="search-bar">
        <input type="text" id="searchInput" placeholder="Search for products..." />
        <button onclick="filterProducts()">Search</button>
      </section>


            <div class="row">
                <div class="col-2">
                    <h1>Stay in the Loop. <br> Stand Out.</h1>
                    <p>LoopedOut is streetwear for the bold—made to stand out, not fit in. <br> Wear your vibe.</p>
                    <a href="#products" class="scroll-button">Shop Now</a>
                </div>
                <div class="col-2">
                    <img src="images/loopedoutt.png">
                </div>
            </div>
        </div>
    </div>


    <div id="products" class="products">
    <div class="card-grid">

        <! –– shirt1 ––>
        <div class="flip-card">
        <div class="flip-inner">
            <div class="flip-front">
            <img src="images/D1_F.jpg" alt="Shirt Front">
            <div class="card-text">
                <h3>Spidey</h3>
                <p>₱499.00</p>
            </div>
            </div>
            <div class="flip-back">
            <img src="images/D1_B.jpg" alt="Shirt Back">
            <label class="size-label">Choose Size</label>
            <div class="size-options">
                <button class="size-btn">S</button>
                <button class="size-btn">M</button>
                <button class="size-btn">L</button>
                <button class="size-btn">XL</button>
            </div>
        </div>
    </div>
        </div>

        <! –– shirt2 ––>
        <div class="flip-card">
        <div class="flip-inner">
            <div class="flip-front">
            <img src="images/D2_F.jpg" alt="Shirt Front">
            <div class="card-text">
                <h3>Hokkaido Wave</h3>
                <p>₱799.00</p>
            </div>
            </div>
            <div class="flip-back">
            <img src="images/D2_B.jpg" alt="Shirt Back">
            <label class="size-label">Choose Size</label>
            <div class="size-options">
                <button class="size-btn">S</button>
                <button class="size-btn">M</button>
                <button class="size-btn">L</button>
                <button class="size-btn">XL</button>
            </div>
        </div>
    </div>
        </div>

        <! –– shirt3 ––>
        <div class="flip-card">
        <div class="flip-inner">
            <div class="flip-front">
            <img src="images/D3_F.jpg" alt="Shirt Front">
            <div class="card-text">
                <h3>Race Enthusiast</h3>
                <p>₱799.00</p>
            </div>
            </div>
            <div class="flip-back">
            <img src="images/D3_B.jpg" alt="Shirt Back">
            <label class="size-label">Choose Size</label>
            <div class="size-options">
                <button class="size-btn">S</button>
                <button class="size-btn">M</button>
                <button class="size-btn">L</button>
                <button class="size-btn">XL</button>
            </div>
        </div>
    </div>
        </div>

        <! –– shirt4 ––>
        <div class="flip-card">
        <div class="flip-inner">
            <div class="flip-front">
            <img src="images/D4_F.jpg" alt="Shirt Front">
            <div class="card-text">
                <h3>Show Your Love</h3>
                <p>₱499.00</p>
            </div>
            </div>
            <div class="flip-back">
            <img src="images/D4_B.jpg" alt="Shirt Back">
            <label class="size-label">Choose Size</label>
            <div class="size-options">
                <button class="size-btn">S</button>
                <button class="size-btn">M</button>
                <button class="size-btn">L</button>
                <button class="size-btn">XL</button>
            </div>
        </div>
    </div>
        </div>

        <! –– shirt5 ––>
        <div class="flip-card">
        <div class="flip-inner">
            <div class="flip-front">
            <img src="images/D5_F.jpg" alt="Shirt Front">
            <div class="card-text">
                <h3>Looped Out</h3>
                <p>₱799.00</p>
            </div>
            </div>
            <div class="flip-back">
            <img src="images/D5_B.jpg" alt="Shirt Back">
            <label class="size-label">Choose Size</label>
            <div class="size-options">
                <button class="size-btn">S</button>
                <button class="size-btn">M</button>
                <button class="size-btn">L</button>
                <button class="size-btn">XL</button>
            </div>
        </div>
    </div>
        </div>

        <! –– shirt6 ––>
        <div class="flip-card">
        <div class="flip-inner">
            <div class="flip-front">
            <img src="images/D6_F.jpg" alt="Shirt Front">
            <div class="card-text">
                <h3>Minimal Sunshine</h3>
                <p>₱499.00</p>
            </div>
            </div>
            <div class="flip-back">
            <img src="images/D6_B.jpg" alt="Shirt Back">
            <label class="size-label">Choose Size</label>
            <div class="size-options">
                <button class="size-btn">S</button>
                <button class="size-btn">M</button>
                <button class="size-btn">L</button>
                <button class="size-btn">XL</button>
            </div>
        </div>
    </div>
        </div>


    </div>
    </div>  


    <div id="productModal" class="modal">
    <div class="modal-content">
        <div class="product-header">
        <p class="category"></p>
        <h2 id="modalTitle"></h2>
        <p id="modalPrice" class="price">$150</p>
        </div>
        <img id="modalImage" src="" alt="Product Image" class="product-img" />
        <p id="modalDescription" class="description">
        The Nike Epic React Flyknit foam cushioning is responsive yet light-weight, durable yet soft...
        </p>

        <div class="size-selector">
        <label>Choose Size</label>
        <div class="sizes">
            <button class="size-btn">S</button>
                <button class="size-btn">M</button>
                <button class="size-btn">L</button>
                <button class="size-btn">XL</button>
        </div>
        </div>

        <button class="add-to-cart">Add to Cart</button>
        <span class="close-btn">&times;</span>
    </div>
    </div>

    

    <script>
    document.querySelectorAll('.size-btn').forEach(button => {
        button.addEventListener('click', () => {
            document.querySelectorAll('.size-btn').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        });
    });
    </script>

    <script>
    document.querySelectorAll('.flip-card').forEach(card => {
        card.addEventListener('click', function () {
            const front = card.querySelector('.flip-front');
            const title = front.querySelector('h3')?.innerText || "Product";
            const price = front.querySelector('p')?.innerText || "₱0.00";
            const imgSrc = front.querySelector('img')?.src || "";

            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalPrice').innerText = price;
            document.getElementById('modalImage').src = imgSrc;
            document.getElementById('modalDescription').innerText = "Detailed product description goes here.";

            document.getElementById('productModal').style.display = "block";
        });
    });

    document.querySelector('.close-btn').addEventListener('click', function () {
        document.getElementById('productModal').style.display = "none";
    });

    window.addEventListener('click', function (e) {
        const modal = document.getElementById('productModal');
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });

    // Optional: Highlight selected size
    document.querySelectorAll('.size-btn').forEach(button => {
        button.addEventListener('click', () => {
            document.querySelectorAll('.size-btn').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        });
    });
    </script>

    <script>
    window.onload = () => {
        const params = new URLSearchParams(window.location.search);
        if (params.has('registered')) {
        alert('Registration successful! Please log in.');
        }
    };
    </script>



    </body>

    <footer>
        <p>&copy; 2025 LoopedOut</p>
        <div class="socials">
          <a href="https://www.facebook.com" target="_blank" title="Facebook">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://www.instagram.com" target="_blank" title="Instagram">
            <i class="bi bi-instagram"></i>
          </a>
        </div>
      </footer>      
      
</html>