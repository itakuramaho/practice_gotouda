<?php
global $pageId, $meta;
?>

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title><?php echo $meta['title']; ?></title>
<meta name="description"
  content="<?php echo $meta['description']; ?>" />

<meta property="og:type" content="website" />
<meta property="og:title"
  content="<?php echo $meta['title']; ?>" />
<meta property="og:site_name"
  content="<?php echo $meta['title']; ?>" />
<meta property="og:url" content="" />
<meta property="og:description"
  content="<?php echo $meta['description']; ?>" />
<meta property="og:image" content="" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
<link rel="stylesheet"
  href="/assets/css/style.css?<?php echo TIMESTAMP ?>" />