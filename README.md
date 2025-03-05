
# Informe del Sistema de Control y Gestión de Residuos Industriales

## Introducción
El presente informe detalla el diseño y estructura del sistema de control y gestión de residuos industriales para empresas manufactureras. Se ha elaborado un modelo de datos basado en dos diagramas de entidad-relación que representan los procesos involucrados en la generación, almacenamiento, transporte, tratamiento y disposición final de los residuos industriales.

## Objetivo del Sistema
El sistema tiene como objetivo principal registrar y gestionar la trazabilidad de los residuos industriales desde su generación hasta su disposición final. Esto permitirá a las empresas manufactureras cumplir con normativas ambientales, optimizar sus procesos de gestión de residuos y reducir el impacto ambiental.

## Descripción del Modelo de Datos
El modelo de datos se compone de diversas entidades que interactúan entre sí para representar el ciclo de vida de los residuos industriales.
## Diagramas del Sistema


### Diagrama 1::
![Diagrama de Clases](img/WhatsApp%20Image%202025-02-15%20at%201.29.06%20PM.jpeg)

### Diagrama 2::
![Diagrama Entidad-Relación](img/WhatsApp%20Image%202025-02-15%20at%201.29.05%20PM.jpeg)

### 1. **Empresa**
- Representa a las compañías manufactureras que generan residuos.
- Contiene información como `id_empresa`, `nombre`, `dirección` y `contacto`.

### 2. **Generador**
- Representa las fuentes dentro de la empresa donde se originan los residuos.
- Contiene datos como `id_generador`, `nombre` y `descripción`.

### 3. **Almacenamiento**
- Representa las ubicaciones donde se depositan temporalmente los residuos.
- Contiene información sobre `ubicación`, `capacidad`, `unidad_medida` y `tipo_residuo`.

### 4. **Transporte**
- Representa el proceso de traslado de los residuos.
- Contiene datos como `empresa_transporte`, `placa_vehículo`, `fecha_salida`, `fecha_llegada` y `estado`.

### 5. **Tratamiento**
- Representa los procesos aplicados a los residuos antes de su disposición final.
- Contiene información como `id_tratamiento`, `tipo` y `descripción`.

### 6. **Disposición Final**
- Representa la eliminación o confinamiento de los residuos.
- Contiene información sobre `método`, `fecha_disposición` y `ubicación`.

### 7. **Regulación**
- Representa las normativas aplicables a la gestión de residuos.
- Contiene información como `id_regulación`, `nombre` y `descripción`.

### 8. **Residuos**
- Es la entidad central del sistema que integra todas las demás entidades.
- Contiene información sobre `tipo`, `cantidad`, `unidad_medida`, `fecha_generación` y `estado`.
- Se relaciona con la empresa que lo genera, el almacenamiento temporal, el transporte, el tratamiento y la disposición final.

## Relación entre Entidades::
- **Una empresa** puede **generar múltiples residuos**.
- **Un generador** produce **varios residuos**.
- **Un residuo** puede ser **almacenado en un depósito** antes de ser transportado.
- **El transporte** moviliza **los residuos desde el almacenamiento hasta el tratamiento o disposición final**.
- **Un residuo puede ser tratado antes de su disposición final**.
- **Las regulaciones se aplican a los residuos** para cumplir con normativas ambientales.

## Conclusión:
El sistema propuesto permitirá un control eficiente y preciso de los residuos industriales, garantizando el cumplimiento de las regulaciones ambientales y optimizando el manejo de los desechos dentro de las empresas manufactureras. La estructura del modelo facilita la trazabilidad completa del residuo desde su origen hasta su disposición final, asegurando una gestión responsable y sostenible.



