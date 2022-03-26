import React, { Component } from "react";
import Plot from "react-plotly.js";

class Bar extends Component {
  render() {
    return (
      <Plot
        data={[{ type: "bar", x: [1, 2, 3], y: [2, 5, 3] }]}
        layout={{
          width: 400,
          height: 300,
          title: "A BAR CHART",
          font: {
            family: "Open Sans"
          }
        }}
        config={{ responsive: true }}
      />
    );
  }
}
export default Bar;
