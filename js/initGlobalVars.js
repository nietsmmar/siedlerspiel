//declare global Variables for groupId, config  itemFiles and get this information at begin of script
let selectMode = false;
let currentAction = 0;
let invModeGroup = 0;

//Images:
let tombStone;
let bgMap;
let skull;
let itemIcons = [];
let groupIcons = [];

let config = [];
$.ajax({
    url: "config/config.json",
    async: false,
    dataType: 'json',
    success: function (data) {
        config = data;
    }
});

let groupId = 100;
$.get("ajax/getRole.php")
    .done(function (data) {
        groupId = parseInt(data);
    });

let wholeGroupData = null;
let wholeInv = null;


let player;
let enemies = [];

function createPlayers(groupId) {
    if (groupId !== 100) {
        player = new Player(groupId, mapX(0), mapY(height * 0.35), 0, height * 0.35);

        for (let i = 1; i <= config['number_groups']; i++) {
            if (i !== groupId) {
                let angle = TWO_PI / config['number_groups'] * i + PI / 2 - PI / config['number_groups'] * 2 * player.groupId;
                let x = cos(angle) * width * 0.4;
                let y = sin(angle) * height * 0.35;
                enemies.push(new Enemy(i, mapX(x), mapY(y), x, y));
            } else {
                enemies.push("");
            }

        }
    } else {
        for (let i = 1; i <= config['number_groups']; i++) {
            let angle = TWO_PI / config['number_groups'] * i + PI / 2 - PI / config['number_groups'] * 2 ;
            let x = cos(angle) * width * 0.4;
            let y = sin(angle) * height * 0.35;
            enemies.push(new Enemy(i, mapX(x), mapY(y), x, y));
        }
    }
}
