@if (!empty(session('success')))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close-button" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@endif

@if (!empty(session('error')))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="close-button" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@endif

<script>
// Function to automatically close alerts after a certain time
document.addEventListener("DOMContentLoaded", function() {
    var alertLifetime = 5000; // 5 seconds
    var alerts = document.querySelectorAll('.alert-dismissible');

    alerts.forEach(function(alert) {
        setTimeout(function() {
            alert.classList.add('fade-out');
            setTimeout(function() {
                alert.remove();
            }, 1000); // Match this to the CSS fade-out transition time
        }, alertLifetime);
    });
});
</script>

<style>
.close-button {
    font-size: 20px;
    color: black;
    background: transparent;
    border: none;
    cursor: pointer;
    position: absolute;
    top: 10px;
    right: 10px;
    padding: 0;
    line-height: 1;
    z-index: 2;
}

.fade-out {
    opacity: 0;
    transition: opacity 1s ease-out; /* 1 second fade out */
}
</style>
