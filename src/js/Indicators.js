import React, { Component } from "react";
import Plot from "react-plotly.js";

class Indicators extends Component {
  render() {
    return (
      <div>
        <Plot
          data={[
            {
              type: "indicator",
              value: 200,
              delta: { reference: 160 },
              gauge: {
                axis: { visible: false, range: [0, 250] },
                bar: {
                  color: "#1f77b4"
                }
              },
              domain: { row: 0, column: 0 },
              font: {
                family: "Open Sans"
              }
            },
            {
              type: "indicator",
              value: 120,
              gauge: {
                shape: "bullet",
                axis: {
                  visible: false,
                  range: [-200, 200]
                },
                bar: {
                  color: "#1f77b4"
                }
              },
              domain: { x: [0.1, 0.5], y: [0.15, 0.35] }
            },
            {
              type: "indicator",
              mode: "number+delta",
              value: 300,
              domain: { row: 0, column: 1 }
            },
            {
              type: "indicator",
              mode: "delta",
              value: 40,
              domain: { row: 1, column: 1 }
            }
          ]}
          layout={{
            width: 400,
            height: 300,
            margin: { t: 25, b: 25, l: 25, r: 25 },
            grid: { rows: 2, columns: 2, pattern: "independent" },
            template: {
              data: {
                indicator: [
                  {
                    title: { text: "SPEED" },
                    mode: "number+delta+gauge",
                    delta: { reference: 90 }
                  }
                ]
              }
            }
          }}
          config={{ responsive: true }}
        />
      </div>
    );
  }
}
export default Indicators;
