<div class="section-header">
    <h1>Page</h1>
      <!-- Breadcrumb -->
      <?php
        $uri = array
        (
            $this->router->fetch_class(),
            $this->router->fetch_method(),
        );
      ?>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url($this->router->fetch_class()); ?>"><?php echo $this->router->fetch_class(); ?></a></div>
        <div class="breadcrumb-item"><a href="<?php echo base_url($this->router->fetch_class().'/'.$this->router->fetch_method()); ?>"><?php echo $this->router->fetch_method(); ?></a></div>
        <?php
            $segments = $this->uri->segment_array();
            if(!empty($segments)):
                foreach($segments as $segment):
                    if(!in_array($segment,$uri)):
        ?>
            <div class="breadcrumb-item"><?php echo $segment; ?></div>
        <?php
                    endif;
                endforeach;
            endif;
        ?>
      </div>
</div>