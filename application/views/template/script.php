<!-- SCRIPTS -->
<script src="<?php base_url(); ?>public/js/jquery-3.4.1.min.js"></script>
<script src="<?php base_url(); ?>public/js/bootstrap.min.js"></script>

<!-- Inserção de SCRIPTS pelo controller -->
<?php 
if (isset ($scripts)){
    foreach($scripts as $script_name) {
        $src = base_url() . "public/js/" . $script_name; ?>
        <script src="<?= $src ?>"></script>

<?php    }    
}
?>

</body>
</html>