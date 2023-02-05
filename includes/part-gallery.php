<script>
jQuery(document).ready(function($) {
    const images = $('.wp-block-image');
    var i = 0;
    const totalImages = images.length;
    const lastImage = totalImages - 1;

    //Initial
    $(function() {

        if (totalImages < 1) {
            $('.gallery').hide();
        } else {
            $('.wp-block-image').hide();

            $('.wp-block-image').eq(i).show();
        }

        if (totalImages == 1) {
            $('.imageSelector').hide();
        }
        
        if (totalImages > 1) {
            $('.imageSelector').show();
            $('.rightArrow').show();
        }

        $('.leftArrow').hide();
    });

    //Right Arrow
    $(function() {

        $('#rightArrow').on('click', () => {
            
            $('.wp-block-image').eq(i).hide();
            i++;
            $('.wp-block-image').eq(i).show();

            if (i => 1) {
                $('.leftArrow').show();
            }

            if (i == lastImage) {
                $('.rightArrow').hide();
            }
        })
    })
    
    //Left Arrow
    $(function() {

        $('#leftArrow').on('click', () => {

            $('.wp-block-image').eq(i).hide();
            i--;
            $('.wp-block-image').eq(i).show();

            if (i === 0) {
                $('.leftArrow').hide();
            }

            if (i < lastImage) {
                $('.rightArrow').show();
            }
        })
    })
})
</script>

<div class="gallery">

    <div class="imageSelector" id="selector">
        <span class="selector leftArrow" id="leftArrow">
            <h2 class="arrow">V</h2>
        </span>

        <div class="gallery-card card">
            <?php echo get_post_gallery(get_the_ID()); ?>
        </div>

        <span class="selector rightArrow" id="rightArrow">
            <h2 class="arrow">V</h2>
        </span>
    </div>
</div>