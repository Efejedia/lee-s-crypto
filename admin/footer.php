<footer class="footer">
    © 2020 - <?php echo date('Y'); ?> Eliteadmin by themedesigner.in
</footer>

<?php 
if (isset($_SESSION['msg'])) {
    unset($_SESSION['msg']);
}
?>