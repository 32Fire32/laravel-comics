<header>
    <div class="container">
      <div class="logo">
        <img src="../assets/dc-logo.png" alt="dcLogo" />
      </div>
      <nav>
        <AppBlue />
        <ul class="nav_header">
          <li v-for="(link, index) in navLinks">
            <a
              href="#"
              :class="{ active: link.active }"
              @click.prevent="changeButton(index)"
              >{{ link.link }}</a
            >
          </li>
        </ul>
      </nav>
    </div>
  </header>