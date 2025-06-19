import axios from "axios";

export const API_BASE_URL = "https://asset.demovoting.com/api";

export const IMAGE_PATH = "https://asset.demovoting.com/uploads";

// console.log("API Base URL:", API_BASE_URL);
// console.log("Image Path:", IMAGE_PATH);

const axiosInstance = axios.create({
  baseURL: API_BASE_URL,
  headers: {
    "Content-Type": "application/json",
  },
});

export default axiosInstance;
