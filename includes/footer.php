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
  let options = {
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  };
  let locale = "fa-IR";
  let today = new Date().toLocaleDateString(locale, options);
  let thistime = new Date().getHours().toLocaleString(locale).toString() + ":" +
    new Date().getMinutes().toLocaleString(locale).toString();
  document.getElementById('DateTime').textContent = `امروز ${today} ساعت ${thistime}`;
</script>
</script>
</body>

</html>