  <footer id="footer">
  <script>
document.getElementById( 'unmask' ).addEventListener( "click", function() {
   
    attribut = document.getElementById( 'mdp' ).getAttribute( 'type');
    attribut1 = document.getElementById( 'mdp1' ).getAttribute( 'type');
    if(attribut == 'password'){
        document.getElementById( 'mdp' ).setAttribute( 'type', 'text');
        document.getElementById( 'mdp1' ).setAttribute( 'type', 'text');
    } else {
        document.getElementById( 'mdp' ).setAttribute( 'type', 'password');
        document.getElementById( 'mdp1' ).setAttribute( 'type', 'password');
    }
    
 });
</script>
    <nav>
      <div class="d-flex justify-content-center">
        <p>&copy 2024 Airbnb, Inc &sdot;  <a href="/">Conditions Générales</a>
      <a href="https://www.facebook.com/AirbnbFrance"><i class="svg-footer bi bi-facebook"></i></a>
    <a href="https://x.com/airbnb_fr"><i class="svg-footer bi bi-twitter-x"></i></a>
  <a href="https://www.instagram.com/airbnb/"><i class="svg-footer bi bi-instagram"></i></a></p>
      </div>
    </nav>
  </footer>

  <!-- import de la librairie popperjs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- import du script bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>

  </html>