<div class="btn__theme">
    <input type="checkbox" id="theme-toggle" {{cache('theme') === 'dark' ? 'checked' : ''}}>
    <label class="toggle-label" for="theme-toggle">
      @svg('images/icons/sun.svg', 'sun')
      @svg('images/icons/moon.svg', 'moon')
    </label>
</div>

<script>
  document.getElementById('theme-toggle').addEventListener('change', function() {
    const root = document.querySelector('html')
    root.setAttribute('data-theme' , root.dataset.theme === 'light' ? 'dark' : 'light')
    axios.post('/theme', {
      data: {
        theme: root.dataset.theme
      }
    })
    .then(res => {
      console.log(res.data)
    })
  })
</script>