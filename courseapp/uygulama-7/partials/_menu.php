<ul class="list-group">
    <?php foreach($categories as $c){ ?>
        <li class="list-group-item <?php echo ($c['active'] == true) ? "active" : "" ?>">
            <a href="#" style="text-decoration:none;color:brown"><?php echo $c['cat_name']; ?></a>
        </li>
    <?php } ?>
</ul>