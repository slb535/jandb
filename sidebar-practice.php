<div id="sidebar" class="practice" >

    <div class="sidebar">

        <?php
        if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail();
        }
        ?>
        <ul>
            <?php
            $url = get_permalink($post->ID);
            if (strpos($url, "administrative") !== false) {
                dynamic_sidebar('AdministrativeLaw');
            }
            if (strpos($url, "appellate") !== false) {
                dynamic_sidebar('AppellateLaw');
            }
            if (strpos($url, "business-litigation") !== false) {
                dynamic_sidebar('BusinessLitigation');
            }
            if (strpos($url, "commercial") !== false) {
                dynamic_sidebar('CommercialTransactions');
            }
            if (strpos($url, "complex") !== false) {
                dynamic_sidebar('ComplexLitigation');
            }
            if (strpos($url, "construction") !== false) {
                dynamic_sidebar('Construction');
            }
            if (strpos($url, "employment") !== false) {
                dynamic_sidebar('Employment');
            }
            if (strpos($url, "energy") !== false) {
                dynamic_sidebar('Energy');
            }
            if (strpos($url, "environmental") !== false) {
                dynamic_sidebar('Environmental');
            }
            if (strpos($url, "general") !== false) {
                dynamic_sidebar('GeneralNegligence');
            }
            if (strpos($url, "health-care") !== false) {
                dynamic_sidebar('HealthCare');
            }
            if (strpos($url, "hospitality") !== false) {
                dynamic_sidebar('Hospitality');
            }
            if (strpos($url, "insurance") !== false) {
                dynamic_sidebar('Insurance');
            }
            if (strpos($url, "mediation") !== false) {
                dynamic_sidebar('Mediation');
            }
            if (strpos($url, "municipal") !== false) {
                dynamic_sidebar('Municipal');
            }

            if (strpos($url, "private-security") !== false) {
                dynamic_sidebar('PrivateSecurity');
            }

            if (strpos($url, "product-liability") !== false) {
                dynamic_sidebar('ProductLiability');
            }
            if (strpos($url, "professional-liability") !== false) {
                dynamic_sidebar('ProfessionalLiability');
            }
            if (strpos($url, "retail") !== false) {
                dynamic_sidebar('Retail');
            }
            if (strpos($url, "toxic-tort") !== false) {
                dynamic_sidebar('ToxicTort');
            }
            if (strpos($url, "transportation") !== false) {
                dynamic_sidebar('Transportation');
            }
            ?>
        </ul>


    </div>

    <div id="sidebar-search" class="widget" >
        <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
    </div>


</div><!--sidebar-->

