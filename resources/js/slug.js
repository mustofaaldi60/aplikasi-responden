const nama = document.getElementById('nama');
const slug = document.getElementById('slug');

nama.addEventListener('change', function() {
    fetch('/siaran/checkSlug?nama=' + nama.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
});

nama.addEventListener('change', function() {
    fetch('/acara/checkSlug?nama=' + nama.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
});