<?php if (have_posts()): while ( have_posts()) : the_post(); ?>
    <div class="blog-post">
        <h2>Post title 1</h2>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate iure aspernatur consequuntur? Beatae sapiente voluptatum sequi ut inventore quas fuga, quos nam saepe quaerat deleniti excepturi delectus aspernatur. Dolore, neque, ducimus itaque tempora id doloremque amet ipsam, officia corrupti earum velit enim error molestias fugit fuga. Facilis ea excepturi tempore earum alias, sapiente ab! Quia eligendi accusamus aliquam non impedit delectus dolor soluta ut error consectetur ad, corrupti assumenda. Reiciendis, veritatis tempora obcaecati, aperiam dolorem quidem corrupti dignissimos, libero natus et delectus dolor! Culpa, voluptas.
        </div>
<?php endwhile; else: ?>
    <h3>Brak postów</h3>
<?php endif; ?>