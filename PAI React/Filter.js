import React, { Component } from "react";
import "./styles.css";

class Filter extends Component {
  constructor(props) {
    super(props);
    this.state = {};
    this.handleChange = this.handleChange.bind(this);
  }

  handleChange(event) {
    this.props.onChange();
  }

  render() {
    return (
      <div className="App">
        <label>
          <input
            type="checkbox"
            checked={this.props.hidden}
            onChange={this.handleChange}
          />
          hide completed
        </label>
      </div>
    );
  }
}

export default Filter;
