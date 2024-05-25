const monsters = {
  Emby: {
    position: {
      x: 280,
      y: 290,
    },
    image: {
      src: './img/embySprite.png'
    },
    frames: {
      max: 4,
      hold: 30
    },
    animate: true,
    name: 'Charizard',
    attacks: [attacks.Tackle, attacks.Fireball,attacks.Razorblades,attacks.Shadowball]
  },
  Draggle: {
    position: {
      x: 760,
      y: 20,
    },
    image: {
      src: './img/draggleSprite.png' 

    },
    frames: {
      max: 4,
      hold: 30
    },
    animate: true,
    isEnemy: true,
    name: 'Bulbasaur',
    attacks: [attacks.Tackle,attacks.Razorblades,attacks.Icewater]
  },
   Draggle2: {
    position: {
      x: 760,
      y: 20,
    },
    image: {
      src: './img/draggleSprite2.png'

    },
    frames: {
      max: 4,
      hold: 30
    },
    animate: true,
    isEnemy: true,
    name: 'Groudon',
    attacks: [attacks.Tackle,attacks.Fireball,attacks.Darkray]
  }
 
}
