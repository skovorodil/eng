from selenium import webdriver
import random
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.common.by import By
from selenium.webdriver.support import expected_conditions as EC
driver = webdriver.Chrome("chromedriver")
EMAIL = "zenit1032@gmail.com"
def test_reg() :
      open()
      WebDriverWait(driver, 40).until(EC.element_to_be_clickable((By.ID, "reg"))).click()
      WebDriverWait(driver, 80).until(EC.element_to_be_clickable((By.ID, "regEmail"))).send_keys("test"+str(random.randint(0, 1000))+"@gmail.com")
      WebDriverWait(driver, 80).until(EC.element_to_be_clickable((By.ID, "regName"))).send_keys("Вадим"+str(random.randint(0, 1000)))
      WebDriverWait(driver, 80).until(EC.element_to_be_clickable((By.ID, "regPhone"))).send_keys(str(random.randint(0, 100000)))
      WebDriverWait(driver, 80).until(EC.element_to_be_clickable((By.ID, "regPas"))).send_keys("12345")
      WebDriverWait(driver, 160).until(EC.element_to_be_clickable((By.ID, "regButton"))).click()
      currentUrl = driver.current_url
      assert(currentUrl == ("https://eng-slang.000webhostapp.com/welcome.php")), "Oh no! This assertion failed!"
      print ("OK2")
def test_login() :
      open()
      WebDriverWait(driver, 10).until(EC.element_to_be_clickable((By.ID, "email"))).send_keys(EMAIL)
      WebDriverWait(driver, 10).until(EC.element_to_be_clickable((By.ID, "pas"))).send_keys("1234")
      WebDriverWait(driver, 10).until(EC.element_to_be_clickable((By.ID, "login"))).click()
      currentUrl = driver.current_url
      assert(currentUrl == ("https://eng-slang.000webhostapp.com/main.php")), "Oh no! This assertion failed!"
      print ("OK1")
      
def open() :
      driver.get("https://eng-slang.000webhostapp.com/")
      driver.maximize_window()
test_login()
test_reg()



