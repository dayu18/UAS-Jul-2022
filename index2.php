<html>
<head>
    <script type="text/javascript" src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js"></script>

    <style type="text/css">
        #dayunetwork {
            width: 100%;
            height: 100%;
            border: 1px solid lightgray;
			margin:auto;
        }
    </style>
</head>
<body>
<div id="dayunetwork"></div>

<script type="text/javascript">


    // create an array with nodes
    var nodes = new vis.DataSet([
        { id: 1, label: "Landmark (1)", color: "#fd9696", width : 20 },
		{ id: 2, label: "Theme park (2)", color: "#b2ffdc", width : 20 },
		{ id: 3, label: "Permainan (3)", color: "#ebede7", width : 20 },
		{ id: 4, label: "Landmark (4)", color: "#fd9696", width : 20 },
		{ id: 5, label: "Alam (5)", color: "#6eff81", width : 20 },
		{ id: 6, label: "Theme park (6)", color: "#b2ffdc", width : 20 },
		{ id: 7, label: "Alam (7)", color: "#6eff81", width : 20 },
		{ id: 8, label: "Alam (8)", color: "#6eff81", width : 20 },
		{ id: 9, label: "Alam (9)", color: "#6eff81", width : 20 },
		{ id: 10, label: "Alam (10)", color: "#6eff81", width : 20 },
		{ id: 11, label: "Landmark (11)", color: "#fd9696", width : 20 },
		{ id: 12, label: "Alam (12)", color: "#6eff81", width : 20 },
		{ id: 14, label: "Alam (13)", color: "#6eff81", width : 20 },
		{ id: 15, label: "Alam (14)", color: "#6eff81", width : 20 },
		{ id: 16, label: "Art (15)", color: "#fe84ff", width : 20 },
		{ id: 17, label: "Alam (16)", color: "#6eff81", width : 20 },
		{ id: 18, label: "Landmark (17)", color: "#fd9696", width : 20 },
		{ id: 19, label: "Alam (18)", color: "#6eff81", width : 20 },
		{ id: 20, label: "Kuliner (19)", color: "#cbcaca", width : 20 },
		{ id: 21, label: "Art (20)", color: "#fe84ff", width : 20 },
		{ id: 22, label: "Art (21)", color: "#fe84ff", width : 20 },
		{ id: 23, label: "Landmark (22)", color: "#fd9696", width : 20 },
		{ id: 24, label: "Landmark (23)", color: "#fd9696", width : 20 },
		{ id: 25, label: "Theme park (24)", color: "#b2ffdc", width : 20 },
		{ id: 26, label: "Alam (25)", color: "#6eff81", width : 20 },
		{ id: 27, label: "Alam (26)", color: "#6eff81", width : 20 },
		{ id: 28, label: "Alam (27)", color: "#6eff81", width : 20 },
		{ id: 29, label: "Alam (28)", color: "#6eff81", width : 20 },
		{ id: 30, label: "Art (29)", color: "#fe84ff", width : 20 },
		{ id: 31, label: "Alam (30)", color: "#6eff81", width : 20 },
		{ id: 32, label: "Kuliner (31)", color: "#cbcaca", width : 20 },
		{ id: 33, label: "Landmark (32)", color: "#fd9696", width : 20 },
		{ id: 34, label: "Landmark (33)", color: "#fd9696", width : 20 },
		{ id: 35, label: "Theme park (34)", color: "#b2ffdc", width : 20 },
		{ id: 36, label: "Alam (35)", color: "#6eff81", width : 20 },
		{ id: 37, label: "Alam (36)", color: "#6eff81", width : 20 },
		{ id: 38, label: "Alam (37)", color: "#6eff81", width : 20 },
		{ id: 39, label: "Alam (38)", color: "#6eff81", width : 20 },
		
		{ id: 40, label: "\n<b>Redzky Yoga</b>\n\n", color: "#62d3ff", width : 20 },
		{ id: 41, label: "\n<b>Aki Baihaki</b>\n\n", color: "#eefb8c", width : 20 },
		{ id: 42, label: "\n<b>Dedi Iswandi</b>\n\n", color: "#bde362", width : 20 },
		{ id: 43, label: "\n<b>Arif Satriya</b>\n\n", color: "lime", width : 20 },
		{ id: 44, label: "\n<b>Dian Ratnasari</b>\n\n", color: "rgb(255,168,7)", width : 20 },
		{ id: 45, label: "\n<b>Muhammad Dinu</b> \n <b>Imansyah</b>\n\n", color: "#7BE141", width : 20 },
		{ id: 46, label: "\n<b>Rohati Nurfitriasari</b>\n\n", color: "#e4b8ff", width : 20 },
		{ id: 47, label: "\n<b>Cindi C.S</b>\n\n", color: "#e1b22f", width : 20 },
		{ id: 48, label: "\n<b>Didik Zulfahmi</b> \n <b>Akbar</b>\n\n", color: "#37ffc9", width : 20 },
		{ id: 49, label: "\n<b>Tharieq Adil </b> \n <b>Ramzi</b>\n\n", color: "#fff137", width : 20 },
    ]);

    // create an array with edges
    var edges = new vis.DataSet([
        {from: 1, to: 40, weight: 15},
        {from: 2, to: 40, weight: 15},
        {from: 3, to: 40, weight: 15},
        {from: 4, to: 40, weight: 15},
		{from: 5, to: 40, weight: 15},
		{from: 1, to: 41, weight: 15},
		{from: 6, to: 41, weight: 15},
		{from: 7, to: 41, weight: 15},
        {from: 8, to: 41, weight: 15},
        {from: 9, to: 41, weight: 15},
        {from: 9, to: 42, weight: 15},
		{from: 10, to: 42, weight: 15},
		{from: 11, to: 42, weight: 15},
		{from: 12, to: 42, weight: 15},
		{from: 14, to: 42, weight: 15},
		{from: 14, to: 43, weight: 15},
		{from: 15, to: 43, weight: 15},
		{from: 16, to: 43, weight: 15},
		{from: 17, to: 43, weight: 15},
		{from: 18, to: 43, weight: 15},
		{from: 19, to: 44, weight: 15},
		{from: 20, to: 44, weight: 15},
		{from: 2, to: 44, weight: 15},
		{from: 11, to: 44, weight: 15},
		{from: 14, to: 44, weight: 15},
		{from: 21, to: 45, weight: 15},
		{from: 22, to: 45, weight: 15},
		{from: 19, to: 45, weight: 15},
		{from: 23, to: 45, weight: 15},
		{from: 24, to: 45, weight: 15},
		{from: 23, to: 46, weight: 15},
		{from: 25, to: 46, weight: 15},
		{from: 26, to: 46, weight: 15},
		{from: 27, to: 46, weight: 15},
		{from: 28, to: 46, weight: 15},
		{from: 29, to: 47, weight: 15},
		{from: 30, to: 47, weight: 15},
		{from: 31, to: 47, weight: 15},
		{from: 2, to: 47, weight: 15},
		{from: 32, to: 47, weight: 15},
		{from: 29, to: 48, weight: 15},
		{from: 33, to: 48, weight: 15},
		{from: 34, to: 48, weight: 15},
		{from: 2, to: 48, weight: 15},
		{from: 35, to: 48, weight: 15},
		{from: 36, to: 49, weight: 15},
		{from: 2, to: 49, weight: 15},
		{from: 37, to: 49, weight: 15},
		{from: 38, to: 49, weight: 15},
		{from: 39, to: 49, weight: 15},
    ]);

    // create a network
    var container = document.getElementById('dayunetwork');

    // provide the data in the vis format
    var data = {
        nodes: nodes,
        edges: edges
    };
    var options = {
		nodes: {
			font: {
				// required: enables displaying <b>text</b> in the label as bold text
				multi: 'html',
				// optional: use this if you want to specify the font of bold text
				bold: '16px arial black'
			}
		}
	};

    // initialize your network!
    var network = new vis.Network(container, data, options);
</script>
</body>
</html>