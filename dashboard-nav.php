<div id="af-home-sidebar" class="col-xs-12 col-sm-4 col-md-3">

  <div id="profile-sidebar" class="">

    <div class="af-home-welcome-card">
      <div class="af-dashboard-avatar">
        <a href="<?php echo home_url(); ?>" title="View my Profile">
          <?php bp_loggedin_user_avatar( 'type=full' ); ?>
        </a>
      </div>
      <div class="af-dashboard-username"><a href="<?php echo home_url(); ?>" title="View my Profile"><?php echo bp_get_user_firstname(); ?></a></div>
      <p class="profile-action-mini">
        <a id="view-my-profile" href="<?php bp_loggedin_user_link(); ?>" class="lighter" title=""><i class="fa fa-user"></i><span class="hidden-xs">View </span>Profile</a>
        <a id="edit-my-profile" class="hidden-sm hidden-md hidden-lg" href="<?php bp_loggedin_user_link(); ?>/profile/edit/group/1/"><i class="fa fa-edit"></i>Edit</a>
        <a id="my-settings" class="hidden-sm hidden-md hidden-lg" href="<?php bp_loggedin_user_link(); ?>/settings/"><i class="fa fa-cog"></i>Settings</a>
      </p>
    </div>

    <div id="item-nav" class="hidden-xs">
      <div class="item-list-tabs" role="navigation">
        <ul>
          <li><a href="<?php echo home_url(); ?>"><i class="fa fa-tachometer"></i>Dashboard</a></li>
          <li><a href="<?php bp_loggedin_user_link(); ?>followers"><i class="fa fa-group"></i> Followers
            <span><?php
              if ( function_exists( 'bp_follow_total_follow_counts' ) ) :
                  $count = bp_follow_total_follow_counts();
                    echo $count['followers'];
                  else:
                      echo "16K";
                  endif;
              ?></span></a></li>
          <li><a href="<?php bp_loggedin_user_link(); ?>following"><i class="fa fa-eye"></i> Following
            <span><?php
              if ( function_exists( 'bp_follow_total_follow_counts' ) ) :
                  $count2 = bp_follow_total_follow_counts();
                    echo $count2['following'];
              else:
                  echo "14K";
              endif;
              ?></span></a></li>
          <hr />
          <li><a id="xedit-my-profile-side" href="<?php bp_loggedin_user_link(); ?>profile/edit"><i class="fa fa-edit"></i>Edit Profile</a></li>
          <li><a id="xmy-settings-side" href="<?php bp_loggedin_user_link(); ?>settings"><i class="fa fa-cog"></i>Account Settings</a></li>
          <hr />
          <li class="hidden-xs"><a href="<?php echo wp_logout_url( home_url() ); ?>"><i class="fa fa-hand-peace-o"></i>Sign out</a></li>
        </ul>
      </div>
    </div><!-- #item-nav -->

  </div>

</div>
