window.setInterval(function () {
    if (groupId == 100) {
        if(wholeGroupData != null) {
            console.log(wholeGroupData);
            let sortedGroupData = wholeGroupData;
            sortedGroupData.sort((a, b) => (a['final_score'] > b['final_score']) ? 1 : ((b['final_score'] > a['final_score']) ? -1 : 0));

            let tableContent = "<tbody id='rankListTableBody'>";
            let rank = 1;
            for (let i = sortedGroupData.length - 1; i >= 0; i--) {
                tableContent += "<tr><td>" + rank + "</td><td>" + sortedGroupData[i]['name'] + "</td><td>Punkte: " + (sortedGroupData[i]['displayScore'] == true ? sortedGroupData[i]['final_score'] : "???") + "</td></tr>";
                rank++;
            }
            tableContent += "</tbody>";
            $('#rankListTableBody').replaceWith(tableContent);
        }
    }
},1000);

