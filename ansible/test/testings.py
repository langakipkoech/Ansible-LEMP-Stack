# function to compute factorial of a number

def factorial(n):
    if n == 0:
        return 1
    else:
        return n * factorial(n-1)
    

# requuest user to input a number
num = int(input("Enter a number: "))

