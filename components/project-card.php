<?php $slug = str_replace(' ', '-', strtolower($project->title) ) ?>

<div class="uk-card uk-card-default card--project">
  <div class="uk-card-media-top">
      <a href="<?php echo $project->url ?>" target="_blank"><img src="assets/images/projects/<?php echo $project->image ?>" alt=""></a>
  </div>
    <div class="uk-card-header">
        <div class="uk-flex-middle">
          <h3><?php echo $project->title ?></h3>
        </div>
    </div>
    <div class="uk-card-body">
      <?php echo $project->body ?>
    </div>
    <div class="uk-card-footer">
      <div class="tech">
        <?php if(isset($project->skills)) { ?>
          <p>Skills used:</p>
          <?php foreach($project->skills as $skills) { ?>
            <span class="uk-label"><?php echo $skills ?></span>
          <?php }
        } ?>
      </div>
      <div class="uk-flex card-buttons">
        <a href="<?php echo $project->url ?>" target="_blank" class="uk-button uk-button-default"><i class="fa fa-external-link" aria-hidden="true"></i> View project</a>
        <?php if(isset($project->repo)) { ?><a href="<?php echo $project->repo ?>" target="_blank" class="uk-button uk-button-default button--code"><i class="fa fa-github" aria-hidden="true"></i> Code</a><?php } ?>
      </div>
    </div>
</div>
