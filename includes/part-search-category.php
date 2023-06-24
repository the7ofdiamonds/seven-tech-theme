<div class="search-category-card card">

    <h2>Search by Category</h2>
    
    <ul class="search-category-list">
        <?php
        $categories = get_categories();
        if (!empty($categories)) {

            foreach ($categories as $category) {
        ?>
                <li>
                    <h3 class="search-category-name category-name"><?php echo $category->name ?></h3>
                </li>
        <?php
            }
        } else {
            echo 'No categories found.';
        }
        ?>
    </ul>
</div>