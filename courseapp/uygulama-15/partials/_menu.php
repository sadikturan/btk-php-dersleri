<div class="list-group">
    <?php foreach(getDb()["kategoriler"] as $kategori): ?>

        <a 
            href="#" 
            class="list-group-item list-group-item-action <?php echo ($kategori["aktif"]) ? "active":"" ?>">
            <?php echo $kategori["kategori_adi"]; ?>
        </a>

    <?php endforeach; ?>
</div>