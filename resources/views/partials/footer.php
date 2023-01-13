<footer>
    <nav class="info-nav">
      <div class="container">
        <div class="shop-link" v-for="shop in shopLinks">
          <AppShopLink :imgSrc="shop.img" :shopText="shop.text" />
        </div>
      </div>
    </nav>
    <div class="footer-bg">
      <div class="container">
        <div class="footer-links">
          <div class="links">
            <h3>DC COMICS</h3>
            <ul>
              <li v-for="comic in dcComics">
                <a href="#">{{ comic }}</a>
              </li>
            </ul>
            <h3>SHOP</h3>
            <ul>
              <li v-for="shop in shops">
                <a href="#">{{ shop }}</a>
              </li>
            </ul>
          </div>
          <div class="links">
            <h3>DC</h3>
            <ul>
              <li v-for="other in others">
                <a href="#">{{ other }}</a>
              </li>
            </ul>
          </div>
          <div class="links">
            <h3>SITES</h3>
            <ul>
              <li v-for="site in sites">
                <a href="#">{{ site }}</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="logoBg">
          <img src="../assets/dc-logo-bg.png" alt="logobg" />
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <button>SIGN-UP NOW!</button>
        <div class="social">
          <h3>FOLLOW US</h3>
          <img src="../assets/footer-facebook.png" alt="face" />
          <img src="../assets/footer-twitter.png" alt="twit" />
          <img src="../assets/footer-youtube.png" alt="you" />
          <img src="../assets/footer-pinterest.png" alt="pin" />
          <img src="../assets/footer-periscope.png" alt="peri" />
        </div>
      </div>
    </div>
  </footer>