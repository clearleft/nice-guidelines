const assetCacheName = 'assetsv1-01';

addEventListener('install', installEvent => {
  skipWaiting();
  installEvent.waitUntil(
	caches.open(assetCacheName) // cache asset files
    .then( assetCache => {
      assetCache.addAll([
        '/fonts/lato-italic.woff2',
        '/fonts/lato-light.woff2',
        '/fonts/lato-regular.woff2',
        '/fonts/lato-semibold.woff2',
        '/i/chevron-left.svg',
        '/i/chevron-right.svg',
        '/i/home.svg',
		'/guideline/01-CG80',
		'/guideline/01-CG81',
		'/guideline/02-CG71',
		'/guideline/02-CG92',
		'/guideline/02-CG94',
		'/guideline/02-CG95',
		'/guideline/02-CG108',
		'/guideline/02-CG126',
		'/guideline/02-CG127',
		'/guideline/02-CG130',
		'/guideline/02-CG144',
		'/guideline/02-CG147',
		'/guideline/02-CG167',
		'/guideline/02-CG168',
		'/guideline/02-CG172',
		'/guideline/02-CG180',
		'/guideline/02-CG181',
		'/guideline/02-CG187',
		'/guideline/03-CG57',
		'/guideline/03-CG153',
		'/guideline/04-CG134',
		'/guideline/05-CG10',
		'/guideline/05-CG15',
		'/guideline/05-CG87',
		'/guideline/06-CG49',
		'/guideline/06-CG61',
		'/guideline/06-CG84',
		'/guideline/06-CG86',
		'/guideline/06-CG99',
		'/guideline/06-CG106',
		'/guideline/06-CG118',
		'/guideline/06-CG125',
		'/guideline/06-CG131',
		'/guideline/06-CG141',
		'/guideline/06-CG152',
		'/guideline/06-CG165',
		'/guideline/06-CG166',
		'/guideline/06-CG184',
		'/guideline/06-CG188',
		'/guideline/07-CG135',
		'/guideline/07-CG140',
		'/guideline/07-CG161',
		'/guideline/08-CG143',
		'/guideline/08-CG151',
		'/guideline/09-CG124',
		'/guideline/10-CG2',
		'/guideline/10-CG169',
		'/guideline/10-CG182',
		'/guideline/10-CG187',
		'/guideline/11-CG35',
		'/guideline/11-CG68',
		'/guideline/11-CG102',
		'/guideline/11-CG105',
		'/guideline/11-CG109',
		'/guideline/11-CG137',
		'/guideline/11-CG150',
		'/guideline/11-CG162',
		'/guideline/11-CG173',
		'/guideline/11-CG176',
		'/guideline/11-CG186',
		'/guideline/12-CG85',
		'/guideline/13-CG9',
		'/guideline/13-CG31',
		'/guideline/13-CG90',
		'/guideline/13-CG115',
		'/guideline/13-CG178',
		'/guideline/14-CG69',
		'/guideline/14-CG83',
		'/guideline/14-CG101',
		'/guideline/14-CG117',
		'/guideline/14-CG121',
		'/guideline/14-CG163',
		'/guideline/14-CG191',
		'/guideline/15-CG79',
		'/guideline/15-CG177',
		'/guideline/16-CG97',
		'/guideline/16-CG148',
		'/guideline/16-CG171',
		'/guideline/16-CG175',
		'/about.php',
      ]); // end addAll
      return assetCache.addAll([
        '/css/all.css',
        '/js/global.js',
		'/offline.html',
		'/'
      ]); // end return addAll
    }) // end open then
  ); // end waitUntil
}); // end addEventListener

addEventListener('activate', activateEvent => {
 activateEvent.waitUntil(
   caches.keys()
   .then( cacheNames => {
     return Promise.all(
       cacheNames.map( cacheName => {
         if (cacheName != assetCacheName) {
           return caches.delete(cacheName);
         } // end if
       }) // end map
     ); // end return Promise.all
   }) // end keys then
   .then( () => {
     return clients.claim();
   }) // end then
 ); // end waitUntil
}); // end addEventListener

addEventListener( 'fetch', fetchEvent => {
  const request = fetchEvent.request;

  // Try the cache first, then the network
  fetchEvent.respondWith(
    caches.match( request )
    .then( responseFromCache => {
      if ( responseFromCache ) {
        // Refresh the cache with a fresh version of this file from the network
        fetchEvent.waitUntil(
          fetch( request )
          .then( responseFromFetch => {
            caches.open( assetCacheName )
            .then( assetCache => {
              return assetCache.put( request, responseFromFetch );
            })
          })
        );
        return responseFromCache;
      }
      return fetch( request )
      .then( responseFromFetch => {
        // Cache any files you fetch
        let copy = responseFromFetch.clone();
        fetchEvent.waitUntil(
          caches.open( assetCacheName )
          .then( assetCache => {
            return assetCache.put( request, copy );
          })
        );
        return responseFromFetch;
      })
      .catch( error => {
        // As a last resort, show an offline page
	if ( request.mode === 'navigate' ) {
	  return caches.match('/offline.html');
	}
      })
    })
  );

});
