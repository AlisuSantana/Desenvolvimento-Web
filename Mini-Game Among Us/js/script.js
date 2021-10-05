GameReactor = {
    computerCombination: [],
    playerCombination: [],
    computerCombinatPosition: 1,
    combinatMaxPosition: 5,
    momeryMaxCombination: 9,

    preparedAudio(filename) {
        const file = `./audio/${filename}?cb=${new Date().getTime()}`;
        const audio = new Audio(file);
        audio.load();
        return audio;
    },
    audio: {
        start: 'start.mp3',
        fail: 'fail.mp3',
        complete: 'complete.mp3',
        combinations: [m0, m1, m2, m3, m4, m5, m6, m7, m8, m9] = 
        ['0.mp3','1.mp3','2.mp3','3.mp3','4.mp3','4.mp3','6.mp3', '7.mp3', '9.mp3'],



    },
    interface: {},

    load() {  },
    start() { 
        GameReactor.computerCombination = GameReactor.createCombitation();
        GameReactor.computerCombinatPosition = 1;
        GameReactor.playerCombination = [];
    },
    
    createCombitation() {
        let newCombination = [];
        for(let i = 0; i < GameReactor.combinatMaxPosition; i++) {
            const position = Math.floor( (Math.random() * GameReactor.momeryMaxCombination) + 1 );
            newCombination.push(position - 1);
        }
        return newCombination;
    }
}
