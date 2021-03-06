<h1>Problem Licences</h1>

<div class="alert alert-info"><span class="lead"><strong>Number of licences with problems: </strong> <?php echo sizeof($licences);?></span></div>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Licence ID</th>
      <th style="width: 350px;">Name</th>
      <th>Type</th>
      <th>Reason</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($licences as $licence) : ?>
    <tr>
      <td><?php echo $licence->licence_identifier; ?></td>
      <td><a href="https://www.gov.uk/<?php echo $licence->slug; ?>"><?php echo $licence->name; ?></a></td>
      <td><?php echo format_licence_type($licence->licence_type); ?></td>
      <td>
        <?php echo format_licence_problem(
          $licence->licence_type,
          $licence->licence_identifier,
          $licence->transaction_url
        ); ?>
      </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
