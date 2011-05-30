<div class="sidebar clearfix">
    <ul>
    <?php if(!dynamic_sidebar('sidebar-1')): ?>
    
        <li class="widget-container">
            <h2 class="widget-title">Archives</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </li>
    
        <li id="search" class="widget-container">
            <?php get_search_form(); ?>
        </li>
    
    <?php endif; ?>
    </ul>
</div>