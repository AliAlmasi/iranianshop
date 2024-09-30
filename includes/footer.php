</section>
</section>
</section>
<footer class="divTable">
  <div class="divTableRow">
    <span class='divTableCell' id='DateTime'></span>
  </div>
  <section class="divTableRow">
    <article class="divTableCell" id="footer"><a href="http://al1almasi.ir" target="_blank" rel="noopener noreferrer">علی الماسی</a> &copy;</span></article>
  </section>
</footer>
</div>
</div>
</div>
<script type="text/javascript">
  function twoDigit(int = 0) {
    if (int.toString().length < 2) return `۰${int}`
    else return `${int}`;
  }
  let options = {
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  };
  let locale = "fa-IR";
  let today = new Date().toLocaleDateString(locale, options);
  let thistime = twoDigit(new Date().getHours().toLocaleString(locale).toString()) + ":" +
    twoDigit(new Date().getMinutes().toLocaleString(locale).toString());
  document.getElementById('DateTime').textContent = `امروز ${today} ساعت ${thistime}`;
  setInterval(() => {
    let thistime = twoDigit(new Date().getHours().toLocaleString(locale).toString()) + ":" +
      twoDigit(new Date().getMinutes().toLocaleString(locale).toString());
    document.getElementById('DateTime').textContent = `امروز ${today} ساعت ${thistime}`;
  }, 10 * 1000)
  document.getElementById('DateTime').addEventListener("click", () => window.location.href = "./calendar.php");
</script>
</script>
</body>

</html>