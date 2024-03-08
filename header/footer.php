<footer class="footer p-10 bg-gray-100 dark:bg-gray-100 dark:text-black text-base-content">
        <aside>
        <img src="images/shapetechlogo-light.png" class="w-36" alt="ShapeTech" id="lightLogo">
          <p>Providing Services since 2017.</p>
        </aside> 
        <nav>
          <h6 class="footer-title">Services</h6> 
          <a class="link link-hover">Branding</a>
          <a class="link link-hover">Design</a>
          <a class="link link-hover">Marketing</a>
          <a class="link link-hover">Advertisement</a>
        </nav> 
        <nav>
          <h6 class="footer-title">Company</h6> 
          <a class="link link-hover">About us</a>
          <a class="link link-hover">Contact</a>
          <a class="link link-hover">Jobs</a>
          <a class="link link-hover">Press kit</a>
        </nav> 
        <nav>
          <h6 class="footer-title">Legal</h6> 
          <a class="link link-hover">Terms of use</a>
          <a class="link link-hover">Privacy policy</a>
          <a class="link link-hover">Cookie policy</a>
        </nav>
      </footer>

      <script>
  // Check if dark mode is enabled
  const darkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

  // Toggle visibility based on dark mode
  const lightLogo = document.getElementById('lightLogo');
  const darkLogo = document.getElementById('darkLogo');

  if (darkMode) {
    lightLogo.classList.add('hidden');
    darkLogo.classList.remove('hidden');
  } else {
    lightLogo.classList.remove('hidden');
    darkLogo.classList.add('hidden');
  }
</script>
    

<script>
const words = ["Together, We Shape the Future!"];
let i = 0;
let j = 0;
let currentWord = "";
let isDeleting = false;

function type() {
  currentWord = words[i];
  if (isDeleting) {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j-1);
    j--;
    if (j == 0) {
      isDeleting = false;
      i++;
      if (i == words.length) {
        i = 0;
      }
    }
  } else {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j+1);
    j++;
    if (j == currentWord.length) {
      
    }
  }
  setTimeout(type, 100);
}

type();
</script>