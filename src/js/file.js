const allPhotos = {
  VendorDetails: [
    {
      src: 'dist/images/vendor-details-1.png',
      w: 1305,
      h: 1194
    },
    {
      src: 'dist/images/vendor-details-2.png',
      w: 1305,
      h: 1200
    },
    {
      src: 'dist/images/vendor-details-3.png',
      w: 1318,
      h: 1200
    },
    {
      src: 'dist/images/vendor-details-4.png',
      w: 1330,
      h: 1199
    },
    {
      src: 'dist/images/vendor-details-5.png',
      w: 1330,
      h: 1221
    },
    {
      src: 'dist/images/vendor-details-6.png',
      w: 1318,
      h: 1166
    },
    {
      src: 'dist/images/vendor-details-7.png',
      w: 1305,
      h: 1201
    },
    {
      src: 'dist/images/vendor-details-8.png',
      w: 1330,
      h: 1204
    }
  ],
  ReactComponents: [
    {
      src: 'dist/images/react-components-1.png',
      w: 1476,
      h: 863
    },
    {
      src: 'dist/images/react-components-2.png',
      w: 1440,
      h: 844
    },
    {
      src: 'dist/images/react-components-3.png',
      w: 1415,
      h: 843
    },
    {
      src: 'dist/images/react-components-4.png',
      w: 1342,
      h: 1020
    },
    {
      src: 'dist/images/react-components-5.png',
      w: 1318,
      h: 896
    },
    {
      src: 'dist/images/react-components-6.png',
      w: 1318,
      h: 897
    },
    {
      src: 'dist/images/react-components-7.png',
      w: 1305,
      h: 768
    },
    {
      src: 'dist/images/react-components-8.png',
      w: 1342,
      h: 915
    },
    {
      src: 'dist/images/react-components-9.png',
      w: 1330,
      h: 1059
    }
  ],
  FastTrack: [
    {
      src: 'dist/images/fast-track-1.jpg',
      w: 756,
      h: 744
    },
    {
      src: 'dist/images/fast-track-2.jpg',
      w: 800,
      h: 1136
    },
    {
      src: 'dist/images/fast-track-3.jpg',
      w: 1536,
      h: 1167
    },
    {
      src: 'dist/images/fast-track-4.jpg',
      w: 800,
      h: 920
    },
    {
      src: 'dist/images/fast-track-5.jpg',
      w: 688,
      h: 768
    },
    {
      src: 'dist/images/fast-track-6.jpg',
      w: 1128,
      h: 1481
    }
  ],
  PropertyDetails: [
    {
      src: 'https://placeimg.com/964/1024/nature',
      w: 964,
      h: 1024
    },
    {
      src: 'https://placeimg.com/1024/683/nature',
      w: 1024,
      h: 683
    }
  ],
  PackageSelection: [
    {
      src: 'https://placeimg.com/964/1024/people',
      w: 964,
      h: 1024
    },
    {
      src: 'https://placeimg.com/1024/683/people',
      w: 1024,
      h: 683
    }
  ],
  SellYourHouse: [
    {
      src: 'https://placeimg.com/964/1024/tech',
      w: 964,
      h: 1024
    },
    {
      src: 'https://placeimg.com/1024/683/tech',
      w: 1024,
      h: 683
    }
  ],
  SalesPredictor: [
    {
      src: 'https://placeimg.com/964/1024/animals',
      w: 964,
      h: 1024
    },
    {
      src: 'https://placeimg.com/1024/683/animals',
      w: 1024,
      h: 683
    }
  ],
  ValuationExpert: [
    {
      src: 'https://placeimg.com/964/1024/architecture',
      w: 964,
      h: 1024
    },
    {
      src: 'https://placeimg.com/1024/683/architecture',
      w: 1024,
      h: 683
    }
  ],
  ChefsClub: [
    {
      src: 'https://placeimg.com/964/1024/nature',
      w: 964,
      h: 1024
    },
    {
      src: 'https://placeimg.com/1024/683/nature',
      w: 1024,
      h: 683
    }
  ],
  ArtistResidence: [
    {
      src: 'https://placeimg.com/964/1024/people',
      w: 964,
      h: 1024
    },
    {
      src: 'https://placeimg.com/1024/683/people',
      w: 1024,
      h: 683
    }
  ],
  BlueFin: [
    {
      src: 'https://placeimg.com/964/1024/any',
      w: 964,
      h: 1024
    },
    {
      src: 'https://placeimg.com/1024/683/any',
      w: 1024,
      h: 683
    }
  ],
  GliffaesHotel: [
    {
      src: 'https://placeimg.com/964/1024/any',
      w: 964,
      h: 1024
    },
    {
      src: 'https://placeimg.com/1024/683/any',
      w: 1024,
      h: 683
    }
  ]
};

const allCardsList = document.querySelectorAll('[data-gallery]');
allCardsList.forEach(card => card.addEventListener('click', openPhotoSwipe));

function openPhotoSwipe() {
  const cardKey = this.dataset.gallery;
  const gallery = new PhotoSwipe(
    document.querySelector('.pswp'),
    PhotoSwipeUI_Default,
    allPhotos[cardKey],
    {
      history: false,
      focus: false
    }
  );

  gallery.init();
}
