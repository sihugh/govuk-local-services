<h1>Check Queue Status</h1>

<hr />

<ul class="nav nav-pills">
  <li class="active"><a href="#servicechecks">Service Check Queue</a></li>
  <li><a href="#urlstatuschecks">URL Status Check Queue</a></li>
</ul>

<hr/>

<h2 id="servicechecks">Service Check Queue</h2>
<p>Full checks of local services</p>

<?php if($service_check_queue) : ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>LGSL</th>
        <th>Service</th>
        <th>Locked</th>
        <th>Created Date</th>
      </tr>
    </thead>
    <tbody>
  <?php foreach($service_check_queue as $service) : ?>
      <tr>
        <td><a href="<?php echo site_url(array('services',$service->lgsl)); ?>"><?php echo $service->lgsl; ?></a></td>
        <td><?php echo $service->description; ?></td>
        <td><?php echo $service->locked; ?></td>
        <td><?php echo date('d-M-Y H:i:s',mysql_to_unix($service->created_date)); ?></td>
      </tr>
  <?php endforeach; ?>
    </tbody>
  </table>
<?php else : ?>
  <div class="alert alert-info">There are no service checks queued</div>
<?php endif; ?>

<hr />

<h2 id="urlstatuscheck">URL Status Check Queue</h2>
<p>Checks of URLs awaiting checking</p>

<?php if($url_status_check_queue) : ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>URL</th>
        <th>From</th>
        <th>LGSL</th>
        <th>LGIL</th>
        <th>Requested By</th>
        <th>Created Date</th>
      </tr>
    </thead>
    <tbody>
  <?php foreach($url_status_check_queue as $url) : ?>
      <tr>
        <td><a href="<?php echo site_url(array('service-urls','history',$url->id)); ?>"><?php echo $url->url_id; ?></a></td>
        <td><a href="<?php echo site_url(array('authorities',$url->snac)); ?>"><?php echo $url->name; ?> (<?php echo $url->snac; ?>)</a></td>
        <td><a href="<?php echo site_url(array('services',$url->lgsl)); ?>"><?php echo $url->lgsl; ?></a></td>
        <td><?php echo $url->lgil; ?></td>
        <td><?php echo $url->requested_by; ?></td>
        <td><?php echo date('d-M-Y H:i:s',mysql_to_unix($url->created_date)); ?></td>
      </tr>
  <?php endforeach; ?>
    </tbody>
  </table>
<?php else : ?>
  <div class="alert alert-info">There are no url status checks queued</div>
<?php endif; ?>