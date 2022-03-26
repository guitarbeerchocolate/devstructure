import React, { Component } from "react";
import Plot from "react-plotly.js";

class Table extends Component {
  render() {
    return (
      <Plot
        data={[
          {
            type: "table",
            header: {
              values: [
                ["<b>EXPENSES</b>"],
                ["<b>Q1</b>"],
                ["<b>Q2</b>"],
                ["<b>Q3</b>"],
                ["<b>Q4</b>"]
              ],
              align: "center",
              line: { width: 1, color: "black" },
              fill: { color: "grey" },
              font: { family: "Open Sans", size: 16, color: "#333" }
            },
            cells: {
              values: [
                ["Salaries", "Office", "Merchandise", "Legal", "<b>TOTAL</b>"],
                [1200000, 20000, 80000, 2000, 12120000],
                [1300000, 20000, 70000, 2000, 130902000],
                [1300000, 20000, 120000, 2000, 131222000],
                [1400000, 20000, 90000, 2000, 14102000]
              ],
              align: "center",
              line: { color: "black", width: 1 },
              font: { size: 11, color: ["black"] }
            }
          }
        ]}
        layout={{
          margin: {
            l: 10,
            r: 10,
            b: 1,
            t: 10,
            pad: 1
          },
          height: 160
        }}
        config={{ responsive: true }}
      />
    );
  }
}
export default Table;
