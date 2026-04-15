<?php if (isset($_SESSION['success']) || isset($_SESSION['error'])): ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
Swal.fire({
    icon: '<?php echo isset($_SESSION['success']) ? "success" : "error"; ?>',
    title: '<?php echo isset($_SESSION['success']) ? "Success" : "Error"; ?>',
    text: <?php echo json_encode($_SESSION['success'] ?? $_SESSION['error']); ?>,
    confirmButtonColor: '#0d6efd'
});
</script>

<?php unset($_SESSION['success'], $_SESSION['error']); ?>
<?php endif; ?>


<script>
document.addEventListener("DOMContentLoaded", function () {

    const entriesSelect = document.getElementById("entriesSelect");
    if (entriesSelect) {
        entriesSelect.addEventListener("change", function () {
            const limit = this.value;
            window.location.href = "?limit=" + limit;
        });
    }

    const searchInput = document.getElementById("searchInput");
    if (searchInput) {
        searchInput.addEventListener("keyup", function () {
            const value = this.value.toLowerCase();
            const rows = document.querySelectorAll("tbody tr");

            rows.forEach(row => {
                row.style.display = row.innerText.toLowerCase().includes(value) ? "" : "none";
            });
        });
    }

});
</script>


</body>
</html>