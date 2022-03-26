import React from "react";
import ReactDOM from "react-dom";
import Bar from "./Bar.js";
import Table from "./Table.js";
import Indicators from "./Indicators.js";
import Ico from "./Icons.js";
import "../css/main.scss";

let tables = document.getElementsByClassName("charts__table");
let bars = document.getElementsByClassName("charts__bar");
let indicators = document.getElementsByClassName("charts__indicators");

ReactDOM.render(<Table />, tables[0]);
ReactDOM.render(<Bar />, bars[0]);
ReactDOM.render(<Indicators />, indicators[0]);

const lo = require("./Lorem");
lo.getLorem();

const ico = require("./Icons");
ico.getIcons();

const nav = require("./Nav");
nav.getNav();
