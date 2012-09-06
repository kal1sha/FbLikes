<?php
require 'ApiFb.php';
$accessToken = 'AAAGhOZC2ns4cBAKAgnpDZB10ulx38eStWNGGeywBQhkpmk0RNNWzx0Qu4ags6rEP9QL7bYxdld1y8ufuxbZA5twdRHtt2IGzoMFeo09FwZDZD';
$fb = new ApiFb($accessToken);

# likes группы
#http://www.facebook.com/groups/[147540135384443]/
#print_r($fb->init('http://www.facebook.com/groups/147540135384443/'));

# likes в записи группу
#http://www.facebook.com/groups/[147540135384443]/permalink/[147581602046963]/
print_r($fb->init('http://www.facebook.com/groups/147540135384443/permalink/147581602046963/'));

#likes комментариев записи в группе
#http://www.facebook.com/groups/[147540135384443]/permalink/[147581602046963]/?comment_id=[147591388712651]&offset=0&total_comments=1
#print_r($fb->init('http://www.facebook.com/groups/147540135384443/permalink/147581602046963/?comment_id=147591388712651&offset=0&total_comments=1'));

# likes в записи на стенке
#http://www.facebook.com/madelyn.mokhna/posts/[4226037245708]
#print_r($fb->init('http://www.facebook.com/madelyn.mokhna/posts/4226037245708'));

# likes коментариев в записях на стенке
#http://www.facebook.com/madelyn.mokhna/posts/[4226037245708]?comment_id=[4777998]&offset=0&total_comments=2
#print_r($fb->init('http://www.facebook.com/madelyn.mokhna/posts/4226037245708?comment_id=4777998&offset=0&total_comments=2'));

# likes в посте в заметках
#http://www.facebook.com/notes/%D0%B0%D0%BD%D0%B4%D1%80%D0%B5%D0%B9-%D0%BC%D0%B8%D0%BB%D0%BB%D0%B8%D0%BE%D0%BD/%D0%B3%D0%BE%D1%80%D0%BE%D0%B4-%D0%BA%D0%B0%D0%BA-%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81/[289785414369149]
#print_r($fb->init('http://www.facebook.com/notes/%D0%B0%D0%BD%D0%B4%D1%80%D0%B5%D0%B9-%D0%BC%D0%B8%D0%BB%D0%BB%D0%B8%D0%BE%D0%BD/%D0%B3%D0%BE%D1%80%D0%BE%D0%B4-%D0%BA%D0%B0%D0%BA-%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81/289785414369149'));

# likes комментариев в посте в заметках
#http://www.facebook.com/notes/%D0%B0%D0%BD%D0%B4%D1%80%D0%B5%D0%B9-%D0%BC%D0%B8%D0%BB%D0%BB%D0%B8%D0%BE%D0%BD/%D0%B3%D0%BE%D1%80%D0%BE%D0%B4-%D0%BA%D0%B0%D0%BA-%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81/[289785414369149]?comment_id=[4582929]&offset=0&total_comments=3
#print_r($fb->init('http://www.facebook.com/notes/%D0%B0%D0%BD%D0%B4%D1%80%D0%B5%D0%B9-%D0%BC%D0%B8%D0%BB%D0%BB%D0%B8%D0%BE%D0%BD/%D0%B3%D0%BE%D1%80%D0%BE%D0%B4-%D0%BA%D0%B0%D0%BA-%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81/289785414369149?comment_id=4582929&offset=0&total_comments=3'));

# likes фотографии
#http://www.facebook.com/photo.php?fbid=[1152566871508]&set=a.1152203222417.16923.1747766399&type=3&theater
#print_r($fb->init('http://www.facebook.com/photo.php?fbid=1152566871508&set=a.1152203222417.16923.1747766399&type=3&theater'));

# likes комментариев в фотографиях
#http://www.facebook.com/photo.php?fbid=[1152566871508]&set=a.1152203222417.16923.1747766399&type=1&comment_id=[195732]&offset=0&total_comments=3
#print_r($fb->init('http://www.facebook.com/photo.php?fbid=1152566871508&set=a.1152203222417.16923.1747766399&type=1&comment_id=195732&offset=0&total_comments=3'));




?>